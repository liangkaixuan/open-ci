<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-06 11:53:02 --> 404 Page Not Found: 
ERROR - 2016-11-06 11:53:10 --> Severity: Notice --> Undefined index: corp_id /home/liangkaixuan/code/open-operation/api/application/models/Activity_model.php 138
ERROR - 2016-11-06 11:53:10 --> [42] SQLSTATE[42S22]: Column not found: 1054 Unknown column 'fk_corp' in 'where clause',update t_mapping_activity_operation set state = :state,utime = :utime  where fk_activity = :fk_activity and fk_corp = :fk_corp and type = :type and rule = :rule
ERROR - 2016-11-06 12:07:59 --> 404 Page Not Found: 
ERROR - 2016-11-06 12:08:26 --> Severity: Error --> Call to undefined method Activity_model::newDatetime() /home/liangkaixuan/code/open-operation/api/application/models/Activity_model.php 134
ERROR - 2016-11-06 16:46:54 --> [22003] SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column 'rule_id' at row 1,insert into t_activity_user_action (fk_activity,fk_user,type,rule,rule_id,utime,ctime) values (:fk_activity,:fk_user,:type,:rule,:rule_id,:utime,:ctime)
ERROR - 2016-11-06 16:51:55 --> Severity: Warning --> Missing argument 2 for Voucher_model::create(), called in /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php on line 176 and defined /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 33
ERROR - 2016-11-06 16:51:55 --> Severity: Warning --> Missing argument 3 for Voucher_model::create(), called in /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php on line 176 and defined /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 33
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: code /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 35
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: ruleInfo /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 36
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: ruleInfo /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 38
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: ruleInfo /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 39
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined index: fk_voucher_rule /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 40
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: ruleInfo /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 41
ERROR - 2016-11-06 16:51:55 --> Severity: Notice --> Undefined variable: ruleInfo /home/liangkaixuan/code/open-operation/api/application/models/voucher/Voucher_model.php 42
ERROR - 2016-11-06 16:51:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 16:51:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 16:53:54 --> [22003] SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column 'to_fk_user' at row 1,insert into t_voucher_user_change_log (fk_voucher,to_fk_user) values (:fk_voucher,:to_fk_user)
ERROR - 2016-11-06 16:55:31 --> [22003] SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column 'to_fk_user' at row 1,insert into t_voucher_user_change_log (fk_voucher,to_fk_user) values (:fk_voucher,:to_fk_user)
ERROR - 2016-11-06 17:10:47 --> Severity: Error --> Call to undefined method Activity_model::logVoustatechange() /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 181
ERROR - 2016-11-06 17:24:59 --> [42] SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'where clause',select * from t_activity_user_action   where fk_activity = :fk_activity and user_id = :user_id order by ctime desc LIMIT :offset, :size
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 27
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 27
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 27
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 27
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:42:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:42:43 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:42:43 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:42:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:42:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:49:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:49:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:49:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:49:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/libraries/ORM_Model.php:320) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:49:27 --> Severity: Error --> Call to undefined function log_message_v2() /home/liangkaixuan/code/open-base/ci/system/libraries/ORM_Model.php 320
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:52:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:52:37 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:52:37 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 26
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:54:37 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:54:37 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:54:37 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:54:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:54:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:55:43 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 29
ERROR - 2016-11-06 22:55:43 --> Severity: Compile Error --> Access level to Activity_model::$tableNameActivity must be protected (as in class MY_Model) or weaker /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 0
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 29
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 29
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 29
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 29
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:56:03 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:56:03 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:56:03 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:56:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:56:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:57:00 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:57:00 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:57:00 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:57:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:57:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG1 - assumed 'OPERATION_DB_CONFIG1' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG1 - assumed 'OPERATION_DB_CONFIG1' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG1 - assumed 'OPERATION_DB_CONFIG1' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG1 - assumed 'OPERATION_DB_CONFIG1' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 22:57:56 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 22:57:56 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 22:57:56 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 22:57:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 22:57:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/core/MY_Model.php 31
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 23:00:51 --> Severity: Notice --> Use of undefined constant OPERATION_DB_CONFIG - assumed 'OPERATION_DB_CONFIG' /home/liangkaixuan/code/open-operation/api/application/models/activity/Activity_model.php 24
ERROR - 2016-11-06 23:00:51 --> Severity: 4096 --> Argument 1 passed to Pdo_Mysql::__construct() must be of the type array, null given, called in /home/liangkaixuan/code/open-base/ci/system/libraries/DIY_Model.php on line 160 and defined /home/liangkaixuan/code/open-base/ci/system/libraries/Pdo_Mysql.php 60
ERROR - 2016-11-06 23:00:51 --> [0] Invalid DB config , The master node is empty.,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 23:00:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/libraries/REST_Controller.php 497
ERROR - 2016-11-06 23:00:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liangkaixuan/code/open-base/ci/system/core/Exceptions.php:272) /home/liangkaixuan/code/open-base/ci/system/core/Common.php 573
ERROR - 2016-11-06 23:02:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 23:02:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 23:02:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 23:02:27 --> [42000] SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OPERATION_ACTIVITY_LIST_SORT LIMIT 0, 0' at line 1,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 23:03:25 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 23:03:25 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 23:03:25 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 23:03:25 --> [42000] SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OPERATION_ACTIVITY_LIST_SORT LIMIT 0, 0' at line 1,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 23:03:26 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 23:03:26 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 23:03:26 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 23:03:26 --> [42000] SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OPERATION_ACTIVITY_LIST_SORT LIMIT 0, 0' at line 1,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size
ERROR - 2016-11-06 23:03:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SIZE - assumed 'OPERATION_ACTIVITY_LIST_SIZE' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 104
ERROR - 2016-11-06 23:03:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_ORDER - assumed 'OPERATION_ACTIVITY_LIST_ORDER' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 110
ERROR - 2016-11-06 23:03:27 --> Severity: Notice --> Use of undefined constant OPERATION_ACTIVITY_LIST_SORT - assumed 'OPERATION_ACTIVITY_LIST_SORT' /home/liangkaixuan/code/open-operation/api/application/controllers/activity/Activity.php 113
ERROR - 2016-11-06 23:03:27 --> [42000] SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OPERATION_ACTIVITY_LIST_SORT LIMIT 0, 0' at line 1,select * from t_activity   where fk_corp = :fk_corp and state = :state order by OPERATION_ACTIVITY_LIST_ORDER OPERATION_ACTIVITY_LIST_SORT LIMIT :offset, :size