var api_url = '';
var gaode_maps_js_api_key='{356040dfc7806d01e8b5c22a1b87b069}';

switch( process.env.NODE_ENV) {
    case 'development':
    api_url='http://roast.test/api/v1';
    break;
    case 'production':
    api_url='http://test.com';
    break;
}

export const ROAST_CONFIG = {
    API_URL:api_url,
    APP_URL:'http://roast.test',
    GAODE_MAPS_JS_API_KEY:gaode_maps_js_api_key
}