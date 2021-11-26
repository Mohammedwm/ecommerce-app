<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($slide_id){
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message','Slider has been deleted successfully!');
    }
    use WithPagination;
    public function render()
    {
        $sliders = HomeSlider::paginate(5);
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
