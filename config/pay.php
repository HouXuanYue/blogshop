<?php
return 
 [	
		//应用ID,您的APPID。
		'app_id' => "2016092700609195",
		'seller_id'=>2088102177524300,
		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEA4Y69KzjNAYP2ehoEhZXOSRawUHPURlSFW2OR9nxNbbztEgdn8cIBrjR04mMEZ+4wdcArdMzWTQse/sU8q9wXXHI4VhIzlBBkbdgknEai8o+d6+mHRhyZ1k1BHEr5Vmkc53fYhQMEfXr5Srh2RdZOtCPsK28aszZbTVUsNvvQtjwY8TFizkKJoBI785I4aEdxGBwBIdFoeoI9ThAoJsbsRCkwMkRReO+HALe6a23HsEp5b/Xdkj4HpRsPO8ZoNXoJHbF7IwS0GFUT8Akhx1g6HtVfPTuMomhlfgWOnEIUUzzll6Y+94iqVnmUvCAppBnu7eAqfIK1CPVSNzQDIX2QRQIDAQABAoIBABTgk13WyhLj1gKDOfvrW8akFPm9Xt6LoDRPSQlZhAkuPXs3uEVGQcWQEWmK5LOB9nZPrTYIZ6WF6/6E3xLBMmBaKiC9WozP35vTL8BPQXHWHTXizaSNrSeKywYFYoK/A+/gxee52caLhVuHK1tXdL1zvb5fcEc6NsU3pvoH4M+dH+glMOgl3Xcm0wPie7/iJlH8vdXMEb19jKu8qM82TbkH36PJ8FP3JdQ7SlDVlu9bHRuY9em8rRYAE5bnHyLBlznGiyNzZqVt87g0C3BXs1ni/fODbbqSE/LdP3nW1TN2trb4coU0lF1OpAaiXBsxPQwItLv0hirKnKmETYlgURkCgYEA+CnczRmi5SeKlqyfout7uc367PMoCyDM71GLemTiQgMXU/d1Klt9BxwURBjBxAVgeADzMZqM/0ftFC7rIbIPIz/rYavm+wn5T4WtDKxiyNRUwzCdWiod6cFwLI5g3UarS+/yKcuPlziNXLAoDiJXeY83Gtz7ksMYSpr+6wCXdGcCgYEA6K4hpO0kbXr3Iy3mh4uSJKwpshTA2UZ+b0WkI4HzplCzotlBQ2ULcyyWsaeAuW+TTV42ArTRaM9qLbx5HGaFO6X979qbUDCvngEzf7E8WwaKvrfm0TxJiHEo0vErR1OkKWjxC2U8yRk88CoV3wHp8ynq8uXIthhAe1LnOn6tynMCgYBVmasOHD+yJ7eITbcq7WtaJhDd1uoDHKdUDZ688zuQZZyQXBVQLQqtfyQGcTu1L92cx0cb3yGvlNHUWnLExrSuBghdQnyEL2aN5aBRdM0GVSd/xK8iQNDcptrYo6wJ56yCnxu7CvpWwS0RwbmvVm0yAxKQ85TbhOxGH7y6txOHFQKBgQDRFolNN3yglPs4NasO6rDtG3hsepHBrcM4IpCZB9H3BlYmZKxs74QWf177TdYyzLzFrX9Dd1Emqhxz9QWwK8BWFZfXzc37hYSKq/GnMZFXCs3rDD7yjwZVAbr5s5Z8hgDi5VaWMuconvFPr8HvoDynMmfa1fpDCBAJwjnfKq7pWQKBgGDwBRGmN1lBkQE9OwFX9y66/qj14w5kGT4ObwvgBkEIyizIFizYzXoqK4Xr8kriEchyFqWMzH6oejxZ7OsCcgti+xVo8c8CNfWQIdoNr1z2HtM+WpCoxkurjg91+mBIdRcTOGmxkz/8d8TM93JBd32tDMz4yhQTOxGvFqGkIvWA",
		
		//异步通知地址
		'notify_url' => "http://39.108.55.32",
		
		//同步跳转
		'return_url' => "http://www.blogshop.com/order/returnpay",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzzQ8kjotQRu8Kyfb9lRWtx1rchvzeVp5TXtcFFeIE4dUvU6NeKCJNlmkFbWnXHKh7chs+Jsn4SoUEnQ4TuJhxfje+l+hRsoKc77Gr7dE870CVDrQ/zEWNqa11oy2jGtWoCSONj4ES3twvPOwAqEmL7idHh4x1j4/R52qqEJXthrSMJbc8pFJue87desu41zK5zMx9eiLtNCTBEFoFC+zKPigV+b/JEkXnf5qbVMjn/IZxjiedPNH7juudDfpRQl/m3wqmPGWywaAuJW2aZ3cr14rWTcZq65C/lLNv9+iGbj5qhi1E8ClXK4te0LmI0yYQYuoJC+UT72J9024JXXaawIDAQAB",
        ];