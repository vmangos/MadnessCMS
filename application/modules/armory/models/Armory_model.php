<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class armory_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	public function getPlayerInfo($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->where('guid',$id)->get('characters');
    }
	public function getCharInvHead($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','0')->get('character_inventory');
    }

    public function getCharInvNeck($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','1')->get('character_inventory');
    }

    public function getCharInvShoulders($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','2')->get('character_inventory');
    }

    public function getCharInvBody($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','3')->get('character_inventory');
    }

    public function getCharInvChest($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','4')->get('character_inventory');
    }

    public function getCharInvWaist($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','5')->get('character_inventory');
    }

    public function getCharInvLegs($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','6')->get('character_inventory');
    }

    public function getCharInvFeet($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','7')->get('character_inventory');
    }

    public function getCharInvWrists($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','8')->get('character_inventory');
    }

    public function getCharInvHands($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','9')->get('character_inventory');
    }

    public function getCharInvFingerOne($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','10')->get('character_inventory');
    }

    public function getCharInvFingerTwo($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','11')->get('character_inventory');
    }

    public function getCharInvTrinketOne($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','12')->get('character_inventory');
    }

    public function getCharInvTrinketTwo($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','13')->get('character_inventory');
    }

    public function getCharInvBack($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','14')->get('character_inventory');
    }

    public function getCharInvMainHand($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','15')->get('character_inventory');
    }

    public function getCharInvOffHand($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','16')->get('character_inventory');
    }

    public function getCharInvRanged($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','17')->get('character_inventory');
    }

    public function getCharInvTabard($MultiRealm, $id)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('item_id')->where('guid',$id)->where('bag','0')->where('slot','18')->get('character_inventory');
    }
	public function searchchar($MultiRealm, $search)
    {
        $this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->like('LOWER(name)', strtolower($search))->get('characters');
    }
	public function searchguild($MultiRealm, $search)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->like('LOWER(name)', strtolower($search))->get('guild');
    }
	public function getGuildInfo($MultiRealm, $guildid)
    {
		$this->multirealm = $MultiRealm;
        return $this->multirealm->select('*')->where('guild_id',$guildid)->get('guild');
    }
	public function getGuildMembers($MultiRealm, $guildid)
    {
		$this->multirealm = $MultiRealm;
		$this->multirealm->select('a.guid,a.name,a.race,a.class,a.level,b.guild_id');
		$this->multirealm->from('characters a');
		$this->multirealm->join('guild_member b', 'a.guid = b.guid', 'left'); 
		$this->multirealm->where('guild_id',$guildid);
		return $this->multirealm->get();        
    }
}