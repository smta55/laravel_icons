<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Proposal;
use Auth;


class ProposalController extends Controller
{
    public function show()
    {
        $proposals= Proposal::get();
        return view('proposal.show',compact('proposals'));
    }


    public function create()
    {
        return view('proposal.create');
    }



    public function save(Request $request)
    {
        $proposal = new Proposal();
        $proposal->clintname = $request->clint; 
        $proposal->propsalvalue = $request->proval; 
        $proposal->proposaltype_id = $request->proposaltype; 
        $proposal->clientsource_id = $request->clientsource; 
        $proposal->technicalapproval_id = $request->technicalapproval; 
        $proposal->user_id = Auth::user()->id;
        $proposal->save();

        
        if($proposal->id){
            $proposal2 =   Proposal::find($proposal->id);

            $ProposalType = $proposal2->Proposaltype->code;
            $TechnicalApproval = $proposal2->Technicalapproval->code;
            $propsalid = str_pad($proposal->id, 4, '0', STR_PAD_LEFT);
            $ClientSource =$proposal2->Clientsource->code;
            $agent = strtoupper(substr($proposal2->User->name, 0, 1) . substr($proposal2->User->lastname, 1, 1) ); 
          
            
            $proposal2->code = $ProposalType . $TechnicalApproval  ."-". $propsalid . "-" . $ClientSource  . $agent;
            $proposal2->save();
            return redirect('proposal');
            // echo "Saved Success";
        }
        

    }
}
