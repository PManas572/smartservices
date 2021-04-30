<?php

namespace App\Http\Controllers;

use App\Models\Airduct_cleaning;
use App\Models\Baby_sitting;
use App\Models\Grass_cutting;
use App\Models\Maid;
use App\Models\Packers_and_movers;
use App\Models\Snow_cleaning;
use Illuminate\Http\Request;

class booking extends Controller
{
    public function airduct_cleaning(Request $request) {

        $airduct_model = new Airduct_cleaning();

        $airduct_model->name = $request->input('name');
        $airduct_model->email = $request->input('email');
        $airduct_model->address = $request->input('address');
        $airduct_model->postal_code = $request->input('postal_code');
        $airduct_model->city = $request->input('city');
        $airduct_model->province = $request->input('province');
        $airduct_model->phNo = $request->input('phNo');
        $airduct_model->date = $request->input('date');
        $airduct_model->time = $request->input('time');
        $airduct_model->save();

        return redirect()->back()->with('success', 'Your booking has been made successfully. One of our agents will contact you');
    }
    public function baby_sitting(Request $request) {

        $babysitting_model = new Baby_sitting();

        $babysitting_model->name = $request->input('name');
        $babysitting_model->email = $request->input('email');
        $babysitting_model->address = $request->input('address');
        $babysitting_model->postal_code = $request->input('postal_code');
        $babysitting_model->city = $request->input('city');
        $babysitting_model->province = $request->input('province');
        $babysitting_model->phNo = $request->input('phNo');
        $babysitting_model->date = $request->input('date');
        $babysitting_model->time = $request->input('time');
        $babysitting_model->save();

        return redirect()->back()->with('success', 'booking done');
    }
    public function grass_cutting(Request $request) {

        $grasscutting_model = new Grass_cutting();

        $grasscutting_model->name = $request->input('name');
        $grasscutting_model->email = $request->input('email');
        $grasscutting_model->address = $request->input('address');
        $grasscutting_model->postal_code = $request->input('postal_code');
        $grasscutting_model->city = $request->input('city');
        $grasscutting_model->province = $request->input('province');
        $grasscutting_model->phNo = $request->input('phNo');
        $grasscutting_model->date = $request->input('date');
        $grasscutting_model->time = $request->input('time');
        $grasscutting_model->save();

        return redirect()->back()->with('success', 'booking done');
    }
    public function maid(Request $request) {

        $maid_model = new Maid();

        $maid_model->name = $request->input('name');
        $maid_model->email = $request->input('email');
        $maid_model->address = $request->input('address');
        $maid_model->postal_code = $request->input('postal_code');
        $maid_model->city = $request->input('city');
        $maid_model->province = $request->input('province');
        $maid_model->phNo = $request->input('phNo');
        $maid_model->numberOfRooms = $request->input('numberOfRooms');
        $maid_model->date = $request->input('date');
        $maid_model->time = $request->input('time');
        $maid_model->save();

        return redirect()->back()->with('success', 'booking done');
    }
    public function packers_and_movers(Request $request) {

        $packers_model = new Packers_and_movers();

        $packers_model->name = $request->input('name');
        $packers_model->email = $request->input('email');
        $packers_model->address = $request->input('address');
        $packers_model->postal_code = $request->input('postal_code');
        $packers_model->city = $request->input('city');
        $packers_model->province = $request->input('province');
        $packers_model->phNo = $request->input('phNo');
        $packers_model->destinationAddress = $request->input('destinationAddress');
        $packers_model->date = $request->input('date');
        $packers_model->time = $request->input('time');
        $packers_model->save();

        return redirect()->back()->with('success', 'booking done');
    }
    public function snow_cleaning(Request $request) {

        $snow_cleaning_model = new Snow_cleaning();

        $snow_cleaning_model->name = $request->input('name');
        $snow_cleaning_model->email = $request->input('email');
        $snow_cleaning_model->address = $request->input('address');
        $snow_cleaning_model->postal_code = $request->input('postal_code');
        $snow_cleaning_model->city = $request->input('city');
        $snow_cleaning_model->province = $request->input('province');
        $snow_cleaning_model->phNo = $request->input('phNo');
        $snow_cleaning_model->date = $request->input('date');
        $snow_cleaning_model->time = $request->input('time');
        $snow_cleaning_model->save();

        return redirect()->back()->with('success', 'booking done');
    }
}
