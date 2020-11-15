<?php

namespace App\Http\Livewire;

use App\Models\OrganizationTag;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Organization extends Component
{
    public $search = "";
    public $organizations = [];
    public $tags = [];

    public $city = "";
    public $search_tag = [];
    public $title = "";

    public $advance_search = false;

    public function render() {

        if(!$this->advance_search) {
            $this->organizations = \App\Models\Organization::where('name', 'like', "%" . $this->search . "%")->get();
            if(count($this->organizations) == 0) {
                $this->organizations = \App\Models\Organization::whereHas('organizationTags', function ($query) {
                    $query->whereIn('tag', [$this->search]);
                })->get();
            }
        }
        else {
            $this->organizations = \App\Models\Organization::whereHas('organizationTags', function ($query) {
                if(count($this->search_tag) > 0)
                    $query->whereIn('tag', $this->search_tag);
            })->where([
                ['name', 'like', '%' . $this->title . '%']
            ])->whereHas('addresses', function ($query) {
                $query->where('city', 'like', '%' . $this->city . '%');
            })->get();
        }

        $this->tags = DB::table('organization_tags')->select('tag')->distinct()->get();

        return  view('livewire.organization');
    }

    public function find() {
        //
        $this->advance_search = false;
        if(count($this->search_tag) > 0 || $this->city || $this->title)
            $this->advance_search = true;
    }
}
