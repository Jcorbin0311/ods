<html>    
    @foreach ($drivers as $driver)
        <div>
            {{ $driver->name }}
        </div>

        {!! Form::open(['method'=>'get','route'=>['driver.show',$driver->id]])!!}
            {!!Form::submit('Show')!!} 
        {!! Form::close() !!}

        {!! Form::open(['method'=>'get','route'=>['driver.edit',$driver->id]])!!}
            {!!Form::submit('Edit')!!} 
        {!! Form::close() !!}

        {!! Form::open(['method'=>'get','route'=>['driver.destroy',$driver->id]])!!}
            {!!Form::submit('Delete')!!} 
        {!! Form::close() !!}
        
        @endforeach
</html>   
