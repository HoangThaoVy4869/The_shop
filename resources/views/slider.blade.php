<div class="slideshow-containers">
    @foreach($sliders as $slider)
        <div class="mySlides fades">
            <img src="{{ $slider->image_path }}" alt="hinh anh" style="width:100%">
        </div>
    @endforeach
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
</div>

    <br>
        <div style="text-align:center">
            @foreach($sliders as $slider)
                <span class="dot"></span>
            @endforeach
        </div>
    <br>