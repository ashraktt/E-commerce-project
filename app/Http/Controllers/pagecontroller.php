<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //
    public function main(){
        return view('layout.main');
            }
            public function labtop(){
                return view('layout.labtop');
                    }
                    public function computer(){
                        return view('layout.computer');
                            }
                            public function electronic(){
                                return view('layout.electronic');
                                    }
                                    public function Projectors(){
                                        return view('layout.Projectors');
                                            }
                                            public function tapmop(){
                                                return view('layout.tapmop');
                                                    }
                                                    public function printer(){
                                                        return view('layout.printer');
                                                            }
                                                            public function product(){
                                                                return view('layout.product');
                                                                    }
                                                                    public function cardpage(){
                                                                        return view('layout.cardpage');
                                                                            }
                                    
    public function signup(){
return view('layout.signup');
    }
    public function userlogin(){
        return view('layout.userlogin');
            }
     public function adminlogin(){
                return view('layout.adminlogin');
                    }
                    public function admin(){
                        return view('layout.admin');
                            }           
}
