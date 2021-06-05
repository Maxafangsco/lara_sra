  @extends('layouts.app') @section('content')
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span lclass="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Awesome Albums</a>
            <div class="nav-collapse collapse"></div>
        </div>
    </div>
    <div class="container" style="text-align: center;">
        <div class="span4" style="display: inline-block; margin-top: 100px;">
            @if($errors->has('message'))
            <div class="alert alert-block alert-error fade in" id="error-block">
                <?php
             $messages = $errors->all('
                <li>:message</li>
                '); ?>
                <button type="button" class="close" data-dismiss="alert">×</button>

                <h4>Warning!</h4>
                <ul>
                    @foreach($messages as $message) {{$message}} @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</body>

@endsection
