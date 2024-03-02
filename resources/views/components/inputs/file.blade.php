@props(["name"])
<label for="myFile" class="file-upload">
    <input type="file" id="myFile" name="{{$name}}">
    {{$slot}}
</label>
