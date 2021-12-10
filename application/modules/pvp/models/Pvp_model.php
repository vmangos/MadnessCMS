<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pvp_model extends CI_Model {

    /**
     * Pvp_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getTop20PVP($MultiRealm)
    {
        $this->multirealm = $MultiRealm;
        return $this->multirealm->select('name, race, class, honor_stored_hk')->where('name !=', '')->order_by('honor_stored_hk', 'DESC')->limit('100')->get('characters');
    }

    public function getRaceGuid($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('race')->where('guid', $id)->get('characters')->row('race');
    }

    public function getClassGuid($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('class')->where('guid', $id)->get('characters')->row('class');
    }

    public function getNameGuid($id, $multirealm)
    {
        $this->multirealm = $multirealm;
        return $this->multirealm->select('name')->where('guid', $id)->get('characters')->row('name');
    }
}
