<%EnableSessionState=False
host = Request.ServerVariables("HTTP_HOST")

if host = "quinones.news" or host = "www.quinones.news" then
response.redirect("https://www.quinones.news/index.html")

else
response.redirect("https://www.quinones.news/error.htm")

end if
%>