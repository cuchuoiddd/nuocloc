@php
    $policies = Helper::getPolicies();
@endphp
@if(isset($policies))
<div id="wrap_policy" class="row">
    @foreach($policies as $policy)
        <div id="policy1" class="policy col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="policy-inner"><span class="aaa-icon" aria-hidden="true">{!!$policy->icon!!}</span>
                <a title="{{$policy->title}}" href="{{$policy->url}}">
                    <b class="h2">{{$policy->title}}</b>
                    <p class="policy-desc">{{$policy->description}}</p>
                </a>
            </div>
        </div>
    @endforeach
</div>
@endif