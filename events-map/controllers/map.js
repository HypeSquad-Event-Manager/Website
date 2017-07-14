'use strict';
var views = require('co-views');
var parse = require('co-body');
var monk = require('monk');
var wrap = require('co-monk');
var db = monk('localhost/library');
var co = require('co');
var AWS = require("aws-sdk");
var fs = require('fs');

var events = [{
    "name": "Potatocon",
    "location": {
        "lat": 46.00,
        "lng": 2.00
    }
}, {
    "name": "An other potaton",
    "location": {
        "lat": 45.00,
        "lng": 2.00
    }
}, {
    "name": "A very mysterious potatocon",
    "location": {
        "lat": 47.00,
        "lng": 2.00
    }
}];


var render = views(__dirname + '/../pages', {
    map: {
        html: 'swig'
    }
});

module.exports.list = function* list(next) {
    if ('GET' != this.method) return yield next;
    this.body = events;
};

module.exports.render = function* fetch(id, next) {
    if ('GET' != this.method) return yield next;
    this.body = yield render('map');

};

module.exports.add = function* add(data, next) {
    if ('POST' != this.method) return yield next;
    console.log(this);
    var event = JSON.parse(yield parse(this, {
        limit: '1kb'
    }));
    console.log(event);
    console.log(this);
    events.push(event);
    console.log(events);
    var error = false;
    if (error) {
        this.throw(405, "The event couldn't be added.");
    } else {
        this.body = "Done";
    }
};

module.exports.modify = function* modify(id, next) {
    if ('PUT' != this.method) return yield next;
    //todo
};

module.exports.remove = function* remove(data, next) {
    if ('DELETE' != this.method) return yield next;
    var eventToRemove = JSON.parse(yield parse(this, {
        limit: '1kb'
    }));
    console.log(events);
    events.forEach(function(event) {
        if (event.name == eventToRemove.name) {
            var index = events.indexOf(event);
            if (index > -1) {
                events.splice(index, 1);
            }
        }
    });
    var error = false;
    if (error) {
        this.throw(405, "The event couldn't be removed.");
    } else {
        this.body = "Done";
    }
};
