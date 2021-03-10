    <!-- Title Form Input -->
    <div class="form-goup">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Contnet Form Input -->
        <div class="form-goup">
            {!! Form::label('content', 'Content:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>