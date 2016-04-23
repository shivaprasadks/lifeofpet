using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Configuration;
using System.Data.SqlClient;
using System.Net.Mail;
using System.Net;

namespace pet
{
    public partial class Appointment : System.Web.UI.Page
    {
        
        protected void Page_Load(object sender, EventArgs e)
        {

        }


        string conn = ConfigurationManager.ConnectionStrings["pet"].ConnectionString;
        protected void btnsubmit_Click1(object sender, EventArgs e)
        {

            
                bool IsAdded = false;
                string AppTime = datepicker.Text.Trim();
                //int AppName = Convert.ToInt32(txtPhone.Text);
                string CustomerName = txtname.Text.Trim();
                string PhoneNo = txtphoneno.Text;
                string Email = txtemail.Text;
              //  string SelectVet = ddlvet.SelectedItem.Text;
                string SelectService = ddlservice.SelectedItem.Text;
                string Message = txtmessage.Text;
              //  using (SqlConnection sqlCon = new SqlConnection(conn))
           //     {
//                    using (SqlCommand cmd = new SqlCommand())
//                    {
//                        //here added "@" to write continuous strind in new line
//                        cmd.CommandText = @"INSERT INTO Appointment(AppTime,AppName,PhoneNo,Email,SelectVet,SelectService,Message)
//                                VALUES(@AppTime,@AppName,@PhoneNo,@Email,@SelectVet,@SelectService,@Message)";
//                        cmd.Parameters.AddWithValue("@AppTime", DateTime.ParseExact(AppTime, "MM/DD/yyyy", null));
//                        //cmd.Parameters.Add("@AppTime", SqlDbType.Date).Value = dateTimePicker.Value.Date;
//                        cmd.Parameters.AddWithValue("@AppName", AppName);
//                        //cmd.Parameters.AddWithValue("@HolidayDate", DateTime.ParseExact(HolidayDate, "dd/MM/yyyy", null));
//                        cmd.Parameters.AddWithValue("@PhoneNo", PhoneNo);
//                        cmd.Parameters.AddWithValue("@Email", Email);
//                        cmd.Parameters.AddWithValue("@SelectVet", SelectVet);
//                        cmd.Parameters.AddWithValue("@SelectService", SelectService);
//                        cmd.Parameters.AddWithValue("@Message", Message);
//                        cmd.Connection = sqlCon;
//                        //btnUpdate.Visible = false;
//                        //btnDelete.Visible = false;
//                        sqlCon.Open();
//                        IsAdded = cmd.ExecuteNonQuery() > 0;
//                        sqlCon.Close();
//                    }
             //   }

                MailMessage mail = new MailMessage();
                mail.From = new MailAddress("lifeofpet83@gmail.com");
                mail.To.Add(new MailAddress("lifeofpet83@gmail.com"));
                mail.Subject = "ABC - Activation Details";
                string content = " Mr/MS " + CustomerName + " with email " + Email + " has requested for " + SelectService + " and has left you with a message  " + Message + " You can call him/her on " + PhoneNo;
                mail.Body = content;
                SmtpClient smtp = new SmtpClient("relay-hosting.secureserver.net");
                smtp.Credentials = new System.Net.NetworkCredential("abc", "def");
                smtp.Port = 25;
                smtp.EnableSsl = true;
                smtp.Send(mail);
                var client = new SmtpClient("relay", 465)
                {
                    Credentials = new NetworkCredential("info@lifeofpet.com", "seyon168"),
                    EnableSsl = true
                };
                
                client.Send("info@lifeofpet.com", "info@lifeofpet.com", "Life Of Pet", content);

                Response.Redirect("ThankYou.html");

               
            
        }
    }
}