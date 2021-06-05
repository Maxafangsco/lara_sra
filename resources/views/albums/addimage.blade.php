  @extends('layouts.app') 
  @section('content')
  <body>
    <div class="container" style="text-align: center;">
        <div class="span4" style="display: inline-block; margin-top: 100px;">
            @if(isset($errors) && $errors->has(''))
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
    <!-- /container -->
</body>
    
  @endsection