<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-9ad6e3
Date:    2017-02-21 06:44:48
Version: v1.1.7
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-9ad6e3",
    "email": {
        "to": "josephjones.canangga@gmail.com",
        "cc": "",
        "bcc": "",
        "subject": "",
        "template": ""
    },
    "admin": {
        "users": "admin:1e3ca",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                },
                "placeholder": "Email Address"
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": false,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "maxlength": {
                        "enabled": true,
                        "val": "11"
                    },
                    "phonenumber": {
                        "enabled": false
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f5",
            "cid": "c29"
        },
        {
            "label": "Address",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-map-marker"
                },
                "placeholder": "Your Address"
            },
            "id": "f7",
            "cid": "c39"
        },
        {
            "label": "Message",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope"
                },
                "placeholder": "Your Message"
            },
            "id": "f3",
            "cid": "c3"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "glyphicon glyphicon-send",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ]
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class