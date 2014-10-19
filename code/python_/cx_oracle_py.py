import cx_Oracle
from datetime import date

connstr='sys/orcl@127.0.0.1:1521/ORCL'
#connstr='user/pwd@tns'

#conn = cx_Oracle.connect(connstr)              #获得联接
conn = cx_Oracle.connect("yincaho", "yinchao", "127.0.0.1:1521/ORCL")
cursor = conn.cursor()                              #获得游标
cid = 1
#rep_date = date(2011,06,30)
#l_cur = cursor.var(cx_Oracle.CURSOR)
#l_query = cursor.callproc('sp_procedure', (cid,rep_date,l_cur))
_sql = "select * from user_tables";
cursor.execute(_sql)
l_results = cursor.fetchall()

#l_results = l_query[2]
for row in l_results:
    print(row)
# Column Specs
for row in l_results.description:
    print(row)
