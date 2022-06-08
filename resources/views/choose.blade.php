@foreach($flats as $flat)
            
            <div class="choose-item">
                <div class="choose-item__img">
                    <img src="{{$flat->type->photo}}" alt="flat">
                </div>
                <div class="choose-item__name">
                    {{$flat->name}}
                </div>
                <div class="choose-item__info">
                    {{$flat->phase->name}}, {{$flat->building->name}}, {{$flat->floor->name}} <br>
                    Size: {{$flat->size}} m<sup>2</sup> <br>
                    No. of rooms: {{$flat->quantity}}
                </div>

                <!-- НОМЕР КВАРТИРЫ И КОМНАТЫ ДЛЯ ПОПАПА-->
                <div class="choose-item__number">
                    22
                </div>
                <ul class="choose-item__rooms">
                    @for($k=0; $k<9; $k++)
                    <li>
							<span>
								{{ $k }}. {{ __('zxc.Прихожая') }}
							</span>
                        <span>
								21,3 м²
							</span>
                    </li>
                @endfor

                </ul>
            </div>
            @endforeach