<x-app-layout>                        

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div style="display:flex; align-items: center;  justify-content: space-between;">

                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-right: 0px; margin-bottom: 20px; border-radius: 1.5rem; margin-top: 1rem">Add Phase</a>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_building" style="margin-right: 0px; margin-bottom: 20px; border-radius: 1.5rem; margin-top: 1rem;">Add Building</a>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_floor" style="margin-right: 22rem; margin-bottom: 20px; border-radius: 1.5rem; margin-top: 1rem;">Add Floor</a>
                    </div>


                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Phase Qo'shish</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ Route('phase.store') }}" method="POST">
                                        @csrf
                                        <div class="" style="width: 80%;" >
                                            <label for="name">Name</label>
                                            <input type="text"class="form-control" id="name" name="name" placeholder="Add Phase name ..." style="border-radius: 1rem">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="myModal_building" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_building" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel_building">Building Qo'shish</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{-- <form action="{{ Route('building.store') }}" method="POST">
                                        @csrf
                                        <select name="phase">
                                            <option value="{{null}}">Select</option>
                                            @foreach($phases as $phase)
                                                <option value="{{$phase->id}}">{{$phase->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="" style="width: 80%;" >
                                            <label for="name">Name</label>
                                            <input type="text"class="form-control" id="name" name="name" placeholder="Add Building name ...">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                                        </div>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div style="display: flex; padding-left:2rem; margin-top: 1.1rem">
                        <div>
                            <form>
                            <div>
                                <label for="cars">Phases:</label>
                                <select name="phase">
                                    <option value="{{null}}">Select Phase</option>
                                    @foreach($phases as $phase)
                                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <div>
                                    <h1  style="padding-top: 2rem">Edit Phase:</h1>
                                    <input type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                    <div style="padding-top: 1rem; margin-left:8rem; ">
                                        <button type="submit" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>
                                        <button type="submit" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div style="padding-left:5.5rem">
                            
                            <div>
                                
                                <label for="cars">Building:</label>
                                <select name="cars" id="cars" style="border-radius: 1rem; width: 10rem">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            
                            <div>
                                <div>
                                    <h1  style="padding-top: 2rem">Edit Building:</h1>
                                    <input type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">

                                    <div style="padding-top: 1rem; margin-left:8rem; ">
                                        <button type="submit" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>

                                        <button type="submit" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>

                                    </div>

                                </div>

                                
                            </div>
                        </div>
                        <div style="padding-left:5.5rem">
                            <div>
                                
                                <label for="cars">Floor:</label>
                                <select name="cars" id="cars" style="border-radius: 1rem; width: 10rem">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            
                            <div>
                                <div>
                                    <h1  style="padding-top: 2rem">Edit Floor:</h1>
                                    <input type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">

                                    <div style="padding-top: 1rem; margin-left:8rem; ">
                                        <button type="submit" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>

                                        <button type="submit" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>

                                    </div>

                                </div>

                                
                            </div>
                        </div>

                        
                    </div>
                                        {{-- <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Billing Name</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                        <th>Payment Status</th>
                                                        <th>Payment Method</th>
                                                        <th>View Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                                        <td>Neal Matthews</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $400
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                                        <td>Jamal Burnett</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $380
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                                        <td>Juan Mitchell</td>
                                                        <td>
                                                            06 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $384
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                                <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                                        <td>Barry Dick</td>
                                                        <td>
                                                            05 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $412
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                                <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                                        <td>Ronald Taylor</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $404
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input type="checkbox" class="form-check-input" id="customCheck7">
                                                                <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                                        <td>Jacob Hunter</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $392
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}
                                        <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
