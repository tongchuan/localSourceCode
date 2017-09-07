const express = require('express');
const router = express.Router();
const userModel = require('../../model/userModel');
const message = require('../../model/messageModel');
router.all('/list',function(req, res, next){
  userModel.find().then((data)=>{
    message.success.data = data
    res.send(message.success)
  },(err)=>{
    message.error.msg = err.toString()
    res.send(message.error)
  })
})

router.all('/delete',function(req, res, next){
  let data = {}
  data[req.body.type] = req.body.value
  userModel.delete().then((data)=>{
    message.success.data = data
    res.send(message.success)
  },(err)=>{
    message.error.msg = err.toString()
    res.send(message.error)
  })
})

router.all('/save',function(req, res, next){
//   Checks route params (req.params), ex: /user/:id
// Checks query string params (req.query), ex: ?id=12
// Checks urlencoded body params (req.body), ex: id=
  let data = {
    name: req.body.name,
    pwd: req.body.pwd,
    date: req.body.date,
    hidden: req.body.hidden,
    age: req.body.age,
    email: req.body.email
  }
  userModel.save(data).then((data)=>{
    message.success.data = data
    res.send(message.success)
  },(err)=>{
    message.error.msg = err.toString()
    res.send(message.error)
  })
})

module.exports = router;