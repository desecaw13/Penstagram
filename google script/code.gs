//https://twitter.com/plr_highertower/status/1418965720747098118

function getPosts() {
  /*
  get all the accounts user follows
  get those their recent posts
  return that
  */
  tmpList = [include("post"),include("post")];
  return tmpList;
}

function include(filename) {
  return HtmlService.createHtmlOutputFromFile(filename)
    .getContent();
}

function doGet(e) {
  return HtmlService.createTemplateFromFile("index")
    .evaluate();
}

function doPost(e) {

}

// todo
/*
Profile.

Posts.

Notifications.

A search bar.

Friending options.

File uploads.

Customisation.

Security.
*/