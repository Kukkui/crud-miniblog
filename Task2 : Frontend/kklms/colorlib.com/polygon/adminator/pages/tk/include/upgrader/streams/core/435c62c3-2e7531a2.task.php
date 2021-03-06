<?php
include_once INCLUDE_DIR.'class.migrater.php';

// Replaced in v1.10 for STAFF_DEPT_TABLE
define('GROUP_TABLE', TABLE_PREFIX.'groups');
define('GROUP_DEPT_TABLE', TABLE_PREFIX.'group_dept_access');

class MigrateGroupDeptAccess extends MigrationTask {
    var $description = "Migrate department access for groups from v1.6";

    function run($max_time) {
        $this->setStatus("Migrating department access");

        $res = db_query('SELECT group_id, dept_access FROM '.GROUP_TABLE);
        if(!$res || !db_num_rows($res))
            return false;  //No groups??

        while(list($groupId, $access) = db_fetch_row($res)) {
            $depts=array_filter(array_map('trim', explode(',', $access)));
            foreach($depts as $deptId) {
                $sql='INSERT INTO '.GROUP_DEPT_TABLE
                    .' SET dept_id='.db_input($deptId).', group_id='.db_input($groupId);
                db_query($sql);
            }
        }
    }
}

return 'MigrateGroupDeptAccess';
?>
