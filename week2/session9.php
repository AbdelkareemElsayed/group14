<?php 

/*
  // Relations . . . 

1 -   1:1  
2 -   1:M  (M:1)
3-    M:M  


 students [name,eamil,password]
 managers [name,email]
 departments [title,code]
 subjects [title,desc,code]




 # Students 
   id    name     password     department_id
   1     root     123              2
   2     test     568              2

*******************************************************************

# Departmnets 
    id    title     code        
    1      IT       IT123        
    2      cs       cs456
    3      Is       Is789
    
*******************************************************************


students      departments 
 1              1
 m              1
=================== 
 m              1 

******************************************************************* 
# Managers 
id   name    email         department_id        status 
1     m1      m1@m.com        1                  0
2     m2      m2@m.com        1                  1

*******************************************************************

managers      departments 
  1              1
  1              1
===================
  1              1 

  *******************************************************************

 # Subjects 
  id    title     desc     code    
  1      pl1       pl1     cs123
  2      pl2       pl2     cs456  
  3      iP        imagep  it789 


students      subjects 
1               m 
m               1
===================
m               m 



# StudentSubjects 
id    student_id    subject_id    status     grade 
1      1               1           1         100
2      1               3           0          85
3      2               2 
4      2               3

*/



/*
# Task .... 
Hospital management system that have 3 main types of users 1-admins 2-doctors 3-Patients.
With the following data.
Admins   (name, email, password ) ,    
Patients (name, email, password)  ,
Doctors  (name, email, password   , specialize(text) , gender).....


Doctors have appointments(day , from , to) and
Patients can reserve these appointments.
Note : doctor can accept or refuse reservations.
Requirments : create a database structure.
########################################################################################################################## 

# Admins . . . 
id   name    email    password
1     root    root@   123


# Patients . . . 
id   name    email    password
1    patent  patent@  123

#doctors . . .
id   name    email    password    specialize    gender      
1     doc     doc@doc  456          x            male       

#################################################################################### 

# usersTypes . . . 
id     title 
1      admin 
2      patient
3      doctor 

# Users 
id     name     email     password     userType_id        
1      root     root@      123            1              
2      patient  patent@    123            2              
3       doc     doc@doc    456            3              

# doctorDetails 
id  specialize    gender      doc_id 
1      x           male        3 

####################################################################################
users       doctorDetails 
1             1 
1             1 
================
1             1 
####################################################################################

usersTypes      users  
1                m 
1                1
=================== 
1                m 

#################################################################################### 





# Appointments 
id     day      from        to   
1      Thur       1:00 pm    1:30 pm 
2      Thur       2:00pm     2:30 pm 




# DoctorsAppointments 
id   appointment_id      doctor_id 
1        1                 1 
2        2                 1  


doctors     appointments 
1             m 
m             1
================ 
m             m 

patient      docAppointments 
1             m 
m             1
================
m             m


# Reservation . . . 
id   patient_id    docAppointment_id        date            status
1      1             1                     16/6/2022         1
1      3             2                     16/6/2022         1 
*/




?>