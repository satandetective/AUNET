<?php
return array(
	//'配置项'=>'配置值'
	'RBAC_SUPERADMIN'       =>  'admin',                  //超级管理员名称
        'ADMIN_AUTH_KEY'        =>'superadmin',     //超级管理员识别
        'USER_AUTH_ON'          =>true,
        'USER_AUTH_TYPE'        =>1,     //验证类型(1,下次登录生效 2,实时生效)
        'USER_AUTH_KEY'         =>'uid',  //session用户识别号
        'RBAC_ROLE_TABLE'       =>'aunet_role',
            'RBAC_USER_TABLE'       =>'aunet_role_user',
            'RBAC_ACCESS_TABLE'     =>'aunet_access',
            'RBAC_NODE_TABLE'       =>'aunet_node',
);