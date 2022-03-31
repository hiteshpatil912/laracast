<!-- FORM CHECKOUT -->
<div class="form-checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div>
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success">
                            {{\Illuminate\Support\Facades\Session::get('success') }}
                        </div>
                    @endif
                </div>
                <form action="{{route('comment')}}" method="post">
                    @csrf

                    <span class="closeForm"><i class="icon md-close-1"></i></span>
                    {{--                    @include('auth.login')--}}
                    <div class="col-md-6">
                        <div class="form-2">
                            <h5>Add Comment:- <br>
                            <div>
                                <textarea name="comment" class="border border-gray-200 p-2 w-full rounded">enter your comment
                                    </textarea>

                            </div><br>
                            {{--                            <div class="form-email">--}}
                            {{--                                <input name="username" type="text" placeholder="Username" class="valid"/>--}}
                            {{--                            </div><br>--}}
                            <div class="form-submit-1">
                                <input type="submit" value="Submit" class="next mc-btn btn-style-1">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END / FORM CHECKOUT -->
