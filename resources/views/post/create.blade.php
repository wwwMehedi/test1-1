@extends('admin.layouts.app')


@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            create post
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{ route('post.store') }}" role="form" method="post">
                                    	@csrf
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input name="title" class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                            
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                   <!--  no contne -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


@endsection