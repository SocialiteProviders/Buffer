<?php
namespace SocialiteProviders\Buffer;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BufferExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('buffer', __NAMESPACE__.'\Provider');
    }
}
