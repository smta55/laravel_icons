<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function Proposaltype()
	{
		return $this->belongsTo('App\Proposaltype');
	}
    
  

    public function Technicalapproval()
	{
		return $this->belongsTo('App\Technicalapproval');
    }

    public function Clientsource()
	{
		return $this->belongsTo('App\Clientsource');
    }
    
  
    public function User()
	{
		return $this->belongsTo('App\User');
    }
    


}
