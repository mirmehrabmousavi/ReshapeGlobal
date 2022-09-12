<h4>{{__('messages.brandRegistration.21')}}</h4>
@foreach($comments as $val)
    <ol class="comment-list scroll-in-animation" data-animation="fadeInDown">
        <li>
            <div class="comment">
                <div class="avatar"><img alt="comment"
                                         src="/back/assets/images/avatars/no-profile.jpg">
                </div>
                <div class="comment-box">
                    <div class="comment-author"><a>Name : {{ $val->name }}</a></div>
                    <div class="comment-text">
                        <p>{{ $val->body }}</p>
                    </div>
                    <br>
                    <br>
                    <a href="#"
                       onclick="if (document.getElementById('form-hide').style.display === 'none') { document.getElementById('form-hide').style.display = 'block' } else { document.getElementById('form-hide').style.display = 'none' }">{{__('messages.reply')}}</a>
                </div>
            </div>

            <form id="form-hide" style="display: none" action="{{route('front.comments.store')}}"
                  class="comment-form scroll-in-animation" data-animation="fadeInDown" method="post"
                  novalidate="novalidate">
                @csrf
                <h4 class=" scroll-in-animation"
                    data-animation="fadeInDown">{{__('messages.brandRegistration.23')}}</h4>
                <div class="row">
                    <div class="col-md-6 control-group">
                        <input type="text" name="name" value="{{old('name')}}" size="40"
                               placeholder="{{__('messages.name')}}"
                               data-validation-required-message="Please fill the required field."
                               required>
                        <div class="help-block"></div>
                    </div>
                    <div class="col-md-6 control-group">
                        <input type="email" name="email" value="{{old('email')}}" size="40"
                               placeholder="{{__('messages.email')}}"
                               data-validation-required-message="Please fill the required field."
                               required>
                        <div class="help-block"></div>
                    </div>
                    <div class="col-md-12 control-group">
                                                    <textarea name="body" placeholder="{{__('messages.message')}}"
                                                              data-validation-required-message="Please fill the required field."
                                                              required></textarea>
                        <div class="help-block"></div>
                    </div>
                    <input type="hidden" name="blog_id" value="{{ $blog_id }}"/>
                    <input type="hidden" name="parent_id" value="{{ $val->id }}"/>
                    <div class="col-md-12 form-actions">
                        <input class="button" type="submit" value="{{__('messages.reply')}}">
                    </div>
                </div>
            </form>

            <ul class="children">
                @include('front.commentDisplay',['comments' => $val->replies])
            </ul>
        </li>
    </ol>
@endforeach
