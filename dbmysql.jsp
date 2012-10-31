<%@ page import="java.sql.*" %>
<html>
<body>

<br><br>
<form method="post" name="form">
<table border="1">

<%
Connection con = null;

String url = "jdbc:mysql://localhost:3306/";
String db = "test";
String driver = "com.mysql.jdbc.Driver";

String userName ="root";
String password="";

int sumcount=0;
Statement st;

try{
    Class.forName(driver).newInstance();
    con = DriverManager.getConnection(url+db,userName,password);
    String query = "select * from user";
    st = con.createStatement();
    ResultSet rs = st.executeQuery(query);
%>


<%
while(rs.next()){
%>

    <%=rs.getString("user_ID")%> - 
    <%=rs.getString("name")%> -
    <%=rs.getString(3)%> -
    <%=rs.getString(4)%> -
    <%=rs.getString(5)%> <br>

<%
}
%>


<%
}

catch(Exception e){
    e.printStackTrace();
}
%>


</table>
</form>
</body>
</html>