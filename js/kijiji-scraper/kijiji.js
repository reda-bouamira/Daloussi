var mysql = require('mysql');

var kijiji = require("kijiji-scraper");

window.getAd = function(url){
	var adAttributes;
	var ad = kijiji.Ad.Get (url).then(function(ad) {
		return ad;
	}).catch(console.error);
	return ad;
}