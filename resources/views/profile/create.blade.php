@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Profile</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">


                        <div class="card-body">
                            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputName">University Name</label>
                                    <input type="text" id="inputName" class="form-control" name="uni_name" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Department Name</label>
                                    <input type="text" id="inputName" class="form-control" name="dept_name" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Start Year</label>
                                    <input type="text" id="inputName" class="form-control" name="start_year" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Pass Year</label>
                                    <input type="text" id="inputName" class="form-control" name="pass_year" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Organization Name</label>
                                    <input type="text" id="inputName" class="form-control" name="org_name" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Designation</label>
                                    <input type="text" id="inputName" class="form-control" name="designation" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Contact Number</label>
                                    <input type="text" id="inputName" class="form-control" name="contact_number"
                                           value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address</label>
                                    <input type="text" id="inputName" class="form-control" name="address" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Duration</label>
                                    <input type="text" id="inputName" class="form-control" name="duration" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Responsibilities</label>
                                    <input type="text" id="inputName" class="form-control" name="responsibilities"
                                           value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Exam Title</label>
                                    <input type="text" id="inputName" class="form-control" name="exam_title" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Major</label>
                                    <input type="text" id="inputName" class="form-control" name="major" value="">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Result</label>
                                    <input type="text" id="inputName" class="form-control" name="result" value="">

                                </div>


                                <a href="" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-success float-right">


                            </form>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </section>
    </div>

@endsection
