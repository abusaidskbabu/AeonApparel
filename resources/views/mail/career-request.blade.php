<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div  class="card shadow">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Career Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4"><strong>Date:</strong></div>
                        <div class="col-md-8">{{$data->created_at}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Firstname:</strong></div>
                        <div class="col-md-8">{{$data->firstname}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Lastname:</strong></div>
                        <div class="col-md-8">
                            {!! $data->lastname !!}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Email:</strong></div>
                        <div class="col-md-8">{{$data->email}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Phone Number:</strong></div>
                        <div class="col-md-8">{{$data->number}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Address:</strong></div>
                        <div class="col-md-8">{{$data->address}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Qualifications:</strong></div>
                        <div class="col-md-8">{{$data->qualifications}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Applied Position:</strong></div>
                        <div class="col-md-8">{{$data->position}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>CV:</strong></div>
                        <div class="col-md-8">
                            Attached
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4"><strong>Message:</strong></div>
                        <div class="col-md-8">{{$data->message}}</div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
