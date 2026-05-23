<?php
include_once(dirname(realpath(dirname(__FILE__))).'/function/config.inc.php');
	
	$aColumns = array('seasonid','sdate', 'enddate','crops_approved', 'type','created_at','created_by','updated_at','updated_by','status');
	
	/* Indexed column (used for fast and accurate table cardinality) */
	$sIndexColumn = "seasonid";
	
	
	/* DB table to use */
	$sTable = "season";
	/* 
	 * Local functions
	 */
	function fatal_error ( $sErrorMessage = '' )
	{
		header( $_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error' );
		die( $sErrorMessage );
	}

	/* 
	 * Paging
	 */
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
			intval( $_GET['iDisplayLength'] );
	}
		
	/*
	 * Ordering
	 */
	$sOrder = "";
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				if(!empty($aColumns[ intval( $_GET['iSortCol_'.$i] ) ])){
					$sOrder .= "`".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."` ".
					($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
				}else{
					
				}
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "ORDER BY  `seasonid` DESC";
		}
	}
	
	
	/* 
	 * Filtering
	 * NOTE this does not match the built-in DataTables filtering which does it
	 * word by word on any field. It's possible to do here, but concerned about efficiency
	 * on very large tables, and MySQL's regex functionality is very limited
	 */
	$sWhere = "";
	if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
			if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" )
			{
				if($aColumns[$i]== 'created_at')
                {
                    $sWhere .= date_search(trim($_GET['sSearch']), 'created_at');
                }
                else
                {
					$sWhere .= "`".$aColumns[$i]."` LIKE '%".mysqli_real_escape_string($con, trim($_GET['sSearch']) )."%' OR ";
				}				
			}
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	/* Individual column filtering */
	for ( $i=0 ; $i<count($aColumns) ; $i++ )
	{
		if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE ";
			}
			else
			{
				$sWhere .= " AND ";
			}
			$sWhere .= "`".$aColumns[$i]."` LIKE '%".mysqli_real_escape_string($con,$_GET['sSearch_'.$i])."%' ";
		}
	}

	
	if ( $sWhere == "" )
	{
		$sWhere = "WHERE ";
	}
	else
	{
		$sWhere .= " AND ";
	}
	$sWhere .= "`status` IN ('2','1')";
	
		
	/*
	 * SQL queries
	 * Get data to display
	 */
	$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $aColumns))."`
		FROM   $sTable
		$sWhere
		$sOrder
		$sLimit
		";
	$rResult = mysqli_query($con, $sQuery ) or fatal_error( 'MySQL Error: ' . mysqli_error($con) );
	
	/* Data set length after filtering */
	$sQuery = "
		SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = mysqli_query($con, $sQuery ) or fatal_error( 'MySQL Error: ' . mysqli_error($con) );
	$aResultFilterTotal = mysqli_fetch_array($rResultFilterTotal);
	$iFilteredTotal = $aResultFilterTotal[0];
	
	/* Total data set length */
	$sQuery = "
		SELECT COUNT(`".$sIndexColumn."`)
		FROM   $sTable
	";
	$rResultTotal = mysqli_query($con, $sQuery ) or fatal_error( 'MySQL Error: ' . mysqli_error($con) );
	$aResultTotal = mysqli_fetch_array($rResultTotal);
	$iTotal = $aResultTotal[0];
	
	/*
	 * Output
	 */
	$output = array(
		"sEcho" => intval($_GET['sEcho']),
		"iTotalRecords" => $iTotal,
		"iTotalDisplayRecords" => $iFilteredTotal,
		"aaData" => array()
	);
	$i= 1;
	while ( $aRow = mysqli_fetch_array( $rResult ) )
	{
	//$aRow = mysql_fetch_array( $rResult ) ;
		$row = array();
		$approved_sea_crop = array();
		$row[] = $i;  
		$row[] = $aRow['sdate'];       		
		$row[] = $aRow['enddate'];
		
		$row[] = get_type($aRow['type']);
		$approved_sea_crop =  json_decode($aRow['crops_approved'], true);
		$arr = array();
		foreach ($approved_sea_crop as $key => $value) {
			
			$where = 'WHERE `cropid` = '.$value;

			$arr[] = get_name('name','crops',$where);
		}

		
		$row[] = implode(", ", $arr);

		$row[] = get_status($aRow['status']);
		
		$row[] =' <div class="btn-group"> <a class="btn btn-mini btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Action <span class="caret"></span> </a>
					<ul class="dropdown-menu">
					  <li><a href="seasons.php?id='.$aRow['seasonid'].'">Edit</a></li>
					  <li class="divider"></li>
					  <li><a href="php/season.php?action=del&id='.$aRow['seasonid'].'" >Delete</a></li>
					</ul>
				  </div>';
		
		
		$output['aaData'][] = $row;
		$i++;
	}
	
	echo json_encode( $output );
?>
