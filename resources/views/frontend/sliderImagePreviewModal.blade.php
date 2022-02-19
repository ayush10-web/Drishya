<!-- Modal -->
<div class="modal fade" id="sliderImagePreviewModal{{$images->images[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="
    margin: 0;
    max-width: 100%;
    padding: 20px;
    margin-left: 15px;">
    <div class="modal-content" style="background-color: rgb(0,0,0,1);">
        <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" style="color: white; font-weight:bold">Image Preview</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: white">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <?php /*
            <div id="carouselExampleControls{{$kk}}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <ul class="carousel-indicators" >
                        @foreach ($sliders as $key => $slides)
                            <li data-target="#carouselExampleControls{{$kk}}" data-slide-to="{{ $key }}"
                                class=" @if ($key == $kk) active @endif"></li>
                        @endforeach
                    </ul>
                    @foreach ($sliders as $key => $slides)
                        <div class="carousel-item @if ($key == $kk) active @endif">
                            <center>
                                <img class="d-block w-100" src="{{ $slides->images[0]->file_path }}" alt="First slide" style="width:555px !important;">
                            </center>
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls{{$kk}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls{{$kk}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            */ ?>

            <center>
                <img class="d-block w-100" src="{{ $images->images[0]->file_path }}" alt="First slide" style="width:555px !important;">
            </center>
        </div>
        <div class="modal-footer">
        footer
        </div>
    </div>
    </div>
</div>