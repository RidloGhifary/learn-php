<?php

function validateLoginRequest(LoginRequest $request)
{
  if (!isset($request->username)) {
    throw new ValidateException("Username is null");
  } else if (!isset($request->password)) {
    throw new ValidateException("Password is null");
  } else if ($request->username === "") {
    throw new Exception("Username is empty");
  } else if ($request->password === "") {
    throw new Exception("Password is empty");
  } else {
    return "Valid";
  }
}
