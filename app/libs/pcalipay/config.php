<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092700609195",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA5859AvvgEVmZc4V9DJig8ZXMijvUGJ/HbOmXTAp+/GlhAwezzpPJ4U0YfCXCe2Pt3unIYcwiZ54s1oRmb4z73FMUf2zUEslXx0HepS8GQGCSlh0YE2Anlc9XHncBlfdKUKkJqnsXnDTDQqoiKkOSEqIwl1hsMdWIGqo78KNTsGacRSXXxJCDM4aVsOno5ga//E9D14wSou8R3mlNmnAVarnAH7LnYlLRhFxoWDbc6OmCNLEgNKST0sxRcj/TnTnBwlxhWyD6YX5XZNR64dgrAbBE5fTbZ7tNNHqD9etsgocy5kBOm4WiTWOJLSwTPLShrBvdQONFRD1m9Sl0WGWyHQIDAQABAoIBAE3RexQyXFFWw/YNHSLKZlVT1ZueZCB0Gy3L6VfEukagVcn/nvQ9lutEx3B9+KEVtfg8gWGbdv1UE3dccUsHiFG5rkrszPEVmJsy2LyZYb7g7LTqRXfTstZPCc8XYnfm0ZLsfGs38YAmElrh5KBNmM8albdpHsFIDu3ssjyhh+nSlRn7YJoBW9izGlyzHB9uvyu1FqtC+k01pLTuTtu5MJ4JrTbGCX+dKYrFxD5/D2SFa11HcSYjv0Dg8sBX5sRuEd7hf31Q83qrFjxYB/WCsWHObQnRWG0v2bdZLonSKItXOLiYPo48SPw4PzacPEgIRqpq2peL4jnpFn9GiW+XgP0CgYEA9I09aJV3/3ROvzH041y0ZukTtd7eafJcKd0J8ctJcbacGy0czXpB93QzSW3Map8QN8vYWBhVpFc26qmOs0IITjjpQQBaZ9ekHnPjU9ri+PeFJ168Z18ZjQfrUo15cH1TMmorpkcJpESIDxcorg9YHLDKratkX8h4eaLZCey/EYMCgYEA8qiCFyGTTDVbeku+CGGBX3svJXo/WzdXOh/YuQv4i8QZmpAt3T3HgmNLihQjbC89ZSP8+czrEnne68c04K5bO2r4nrjPtXw+WZMegWKAPrSQ2WjA4W159Q5+WHsowYJxPZYrK88ynTrvbWSYsiUm0tc0gOD+vfKCYIAcxIDu+98CgYEAkpmEwYgwqkOX3UfeTNnLD5ITjcgvvoVaOIJYLsm1mmRkymnNxWPP3b6b7B3VF+mIuFoLtCvKUz0xH5VLhSxFfFbjhWLnzy5XJSZFlYQ24hbHjKVe/fzlfUTNDezfas7GLAe3aPNW1VF72sgAS+/I21Ij/d4ryruLdSdpQmjY1W8CgYAnikvAZykwVtV0JRlvFixVmaYCDlx6iZb+Eqhm5st2QtsFM481qNZ0qadqdYOcIkp3y5hyP/DiDtfDRa+ZGPAmy3R9sJGv+fHS+MUUwi8xiIy90HL1iLhBtT3jPxZSCeZX6btZJScTNcJD6gtzo9girQySH5eC7hxOizGk13mZswKBgQCnrmgXJOOwADTvMW5xHK50UdOEbPYAEHfjnsufAApo3QLfBAwK2R42zdGv91ME8zc9smAb4w63WizeVZSc7CrITAibd3xpB2qrL04v0VgKedFQ2LfnPyVzATEIzHo+uvX/e22Dbeh5ooIAS1d5+kvl+KuLLA5JpoCYqFTS/Za/zw==",
		
		//异步通知地址
		'notify_url' => "http://39.108.55.32",
		
		//同步跳转
		'return_url' => "http://localhost/alipay111/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzzQ8kjotQRu8Kyfb9lRWtx1rchvzeVp5TXtcFFeIE4dUvU6NeKCJNlmkFbWnXHKh7chs+Jsn4SoUEnQ4TuJhxfje+l+hRsoKc77Gr7dE870CVDrQ/zEWNqa11oy2jGtWoCSONj4ES3twvPOwAqEmL7idHh4x1j4/R52qqEJXthrSMJbc8pFJue87desu41zK5zMx9eiLtNCTBEFoFC+zKPigV+b/JEkXnf5qbVMjn/IZxjiedPNH7juudDfpRQl/m3wqmPGWywaAuJW2aZ3cr14rWTcZq65C/lLNv9+iGbj5qhi1E8ClXK4te0LmI0yYQYuoJC+UT72J9024JXXaawIDAQAB",
);