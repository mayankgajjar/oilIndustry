<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Oil Industry
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <section>
                <div class="modal-body">
                    <img src="{{ URL::asset('/news_images/'.$news['image']) }}" alt=" " class="img-responsive" />
                    <h5>{{$news['title']}}</h5>
                    <p>{{$news['description']}}</p>
                </div>
            </section>
        </div>
    </div>