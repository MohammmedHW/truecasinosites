<?php
if (!function_exists('select')) {
    function select($table, $where_condition = '', $order_by = '', $group_by = '', $limit = '', $order = 'ASC', $start = 0, $show_queries = 0) {
        global $con;
        
        $sql = "SELECT * FROM `$table`";
        
        // Process where condition
        if (!empty($where_condition)) {
            if (is_array($where_condition)) {
                $where_parts = [];
                foreach ($where_condition as $col => $val) {
                    $where_parts[] = "`$col` = '" . mysqli_real_escape_string($con, $val) . "'";
                }
                $sql .= " WHERE " . implode(" AND ", $where_parts);
            } else {
                // It's a raw string
                $sql .= " WHERE " . $where_condition;
            }
        }
        
        if (!empty($group_by)) {
            $sql .= " GROUP BY `$group_by`";
        }
        
        if (!empty($order_by)) {
            $sql .= " ORDER BY `$order_by` $order";
        }
        
        if (!empty($limit)) {
            $sql .= " LIMIT $start, $limit";
        }
        
        $res = mysqli_query($con, $sql);
        if (!$res) {
            return [['total_rows' => '0']];
        }
        
        $num_rows = mysqli_num_rows($res);
        $rows = [];
        if ($num_rows == 0) {
            $rows[0] = ['total_rows' => '0'];
        } else {
            while ($row = mysqli_fetch_assoc($res)) {
                $row['total_rows'] = (string)$num_rows;
                $rows[] = $row;
            }
        }
        return $rows;
    }
}

if (!function_exists('insert')) {
    function insert($table, $data, $check_update = '0', $return_id = '0') {
        global $con;
        
        // If check_update is true (1) and we have an 'id' in data
        if (($check_update == '1' || $check_update === true) && isset($data['id']) && $data['id'] != '') {
            // Perform UPDATE
            $id = mysqli_real_escape_string($con, $data['id']);
            unset($data['id']); // Don't update the ID column itself
            $updates = [];
            foreach ($data as $key => $val) {
                if ($val === 'NOW()') {
                    $updates[] = "`$key` = NOW()";
                } else {
                    $updates[] = "`$key` = '" . mysqli_real_escape_string($con, $val) . "'";
                }
            }
            $sql = "UPDATE `$table` SET " . implode(", ", $updates) . " WHERE `id` = '$id'";
            $res = mysqli_query($con, $sql);
            return $res ? true : false;
        } else {
            // Perform INSERT
            $fields = [];
            $values = [];
            foreach ($data as $key => $val) {
                $fields[] = "`$key`";
                if ($val === 'NOW()') {
                    $values[] = "NOW()";
                } else {
                    $values[] = "'" . mysqli_real_escape_string($con, $val) . "'";
                }
            }
            $sql = "INSERT INTO `$table` (" . implode(", ", $fields) . ") VALUES (" . implode(", ", $values) . ")";
            $res = mysqli_query($con, $sql);
            if ($res) {
                if ($return_id == '1' || $return_id === true) {
                    return mysqli_insert_id($con);
                }
                return true;
            }
            return false;
        }
    }
}

if (!function_exists('delete_status')) {
    function delete_status($table, $column, $val) {
        global $con;
        $val = mysqli_real_escape_string($con, $val);
        $sql = "DELETE FROM `$table` WHERE `$column` = '$val'";
        return mysqli_query($con, $sql);
    }
}

if (!function_exists('activity_employee')) {
    function activity_employee($emp_id, $module, $summary, $type) {
        global $con;
        $emp_id = mysqli_real_escape_string($con, $emp_id);
        $module = mysqli_real_escape_string($con, $module);
        $summary = mysqli_real_escape_string($con, $summary);
        $type = mysqli_real_escape_string($con, $type);
        $ip = mysqli_real_escape_string($con, $_SERVER['REMOTE_ADDR'] ?? '');
        $created_at = time();
        
        $sql = "INSERT INTO `activity_system` (`emp_id`, `module`, `summary`, `type`, `ip`, `created_at`, `updated_at`) 
                VALUES ('$emp_id', '$module', '$summary', '$type', '$ip', '$created_at', '$created_at')";
        return mysqli_query($con, $sql);
    }
}

if (!function_exists('random_number')) {
    function random_number($length) {
        $chars = "0123456789";
        $result = "";
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $result;
    }
}

if (!function_exists('get_status')) {
    function get_status($status) {
        $status = (string) $status;

        if ($status === '1' || strtolower($status) === 'active') {
            return '<span class="label label-success">Active</span>';
        }

        if ($status === '2' || strtolower($status) === 'inactive') {
            return '<span class="label label-important">Inactive</span>';
        }

        return '<span class="label">Unknown</span>';
    }
}

if (!function_exists('date_search')) {
    function date_search($search, $column) {
        $search = trim((string) $search);
        $column = preg_replace('/[^a-zA-Z0-9_]/', '', (string) $column);

        if ($search === '' || $column === '') {
            return "1 = 1";
        }

        $timestamp = strtotime($search);
        if ($timestamp === false) {
            return "`$column` LIKE '%" . addslashes($search) . "%'";
        }

        $start = strtotime(date('Y-m-d 00:00:00', $timestamp));
        $end = strtotime(date('Y-m-d 23:59:59', $timestamp));

        return "(`$column` >= '$start' AND `$column` <= '$end')";
    }
}
?>
