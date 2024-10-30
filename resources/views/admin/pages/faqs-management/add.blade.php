@extends('admin.layouts.master')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                {{-- <a href="#" class="btn btn-lg btn-info" >View List</a> --}}
                {{-- <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a> --}}
            </div>

            {{-- <h2 class="panel-title">Ajax</h2> --}}
        </header>
        <div class="panel-body">
            <form data-action="faqs/save" class="adminFrm">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Question</label>
                                <input type="text" name="qustion" class="form-control requiredCheck" data-check="Question">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Answer</label>
                                {{-- <input type="text" name="lastname" class="form-control"> --}}
                                <textarea name="answer" id="" cols="30" rows="10" class="form-control requiredCheck" data-check="Answer"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-success" type="submit">Save</button>
                </footer>
            </form>

        </div>
    </section>
@endsection
