<?php
/**
 * Created by PhpStorm.
 * User: fregini
 * Date: 25/07/2017
 * Time: 11:07
 */

namespace Features\Dqf\Service\Struct\Response;


use Features\Dqf\Service\Struct\BaseStruct;

class ProjectResponseStruct extends BaseStruct {

    public $id ;
    public $completionTimestamp ;
    public $creationTimestamp ;
    public $name ;
    // public $ownerUser ;
    public $status ;
    public $type ;
    public $updateTimestamp ;
    // public $user ;
    public $uuid ;
    public $level ;
    public $isReturn ;
    public $files ;
    public $integrator ;
    public $integratorProjectMap ;
    public $language ;
    public $projectSettings ;
    public $projectReviewSetting ;
    public $projectTargetLangs ;
    public $fileProjectTargetLangs ;
    public $active ;

    public function __set($method, $data) {
        if ( $method == 'user' || $method == 'ownerUser' ) {
            $this->_user = new UserResponseStruct( $data );
        }
    }

    public function __get($method) {
        $method = "_$method";
        return $this->$method ;
    }

}