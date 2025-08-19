<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\InvestmentOpportunity;
use App\Models\Investment;
class AgreementDrawer extends Component
{

    protected $listeners = ['openAgreementDrawer' => 'open'];

    public $opportunity;
    public $investmentAmount;
    public $investment;
    public $visible = false;
    public $shariah = false;

    public function open($data)
    {

        $this->opportunity = InvestmentOpportunity::with('project')->findOrFail($data['opportunity_id']);
        $this->investment = Investment::findOrFail($data['investment']);
        $this->investmentAmount = $data['amount'];
        $this->shariah = $data['shariah'];
        $this->visible = true;
    }

    public function close()
    {
        $this->visible = false;
    }

    public function render()
    {
        return view('livewire.agreement-drawer');
    }
}
