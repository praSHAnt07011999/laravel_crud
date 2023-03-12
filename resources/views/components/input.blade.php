<div class="form-group">
    <label for="">{{$label}}</label>
    <input type={{$type}} name={{$name}} id="" class="form-control" placeholder="" aria-describeby="helpId" value={{$val}}/>
    <span class="text-danger">
        <!-- @error('email')
        {{$message}}
        @enderror -->
    </span>
    <!-- <small id="helpId" class="text-muted">Help Text</small> -->
</div>