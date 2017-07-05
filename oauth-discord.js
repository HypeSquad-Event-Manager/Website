var config = require('./config.json');
var rp = require('request-promise-native');
module.exports = {
    getUrl: function(url) {
        return "https://discordapp.com/oauth2/authorize?redirect_uri=" + config.discordCb + "&scope=identify&response_type=code&client_id=" + config.discordId;
    },
    getData: function(code) {
        var payload = {
            method: 'POST',
            uri: 'https://discordapp.com/api/oauth2/token',
            form: {
                'client_id': config.discordId,
                'client_secret': config.discordSecret,
                'code': code,
                'redirect_uri': config.discordCb,
                'grant_type': 'authorization_code'
            }
        }
        return rp(payload).then(function(body) {
            var token = JSON.parse(body).access_token;
            var payload = {
                uri: 'https://discordapp.com/api/users/@me',
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                json: true
            }
            return rp(payload);
        })
    }
}