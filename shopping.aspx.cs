using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.IO;
using System.Data;
using System.Configuration;
using System.Drawing;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.Security;

namespace pet
{
    public partial class shopping : System.Web.UI.Page
    {
        string constring = ConfigurationManager.ConnectionStrings["a2z"].ConnectionString;
        SqlDataAdapter sqlda = new SqlDataAdapter();
        DataTable dt = new DataTable();
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!Page.IsPostBack)
            {
                BindDataList();
            }
        }
        private void BindDataList()
        {

            SqlConnection con = new SqlConnection(constring);
            con.Open();
            sqlda = new SqlDataAdapter("SELECT top 4 ItemId,ItemName,ItemPrice,ItemImage FROM videogallery ORDER BY ID DESC", con);
            dt = new DataTable();
            sqlda.Fill(dt);

            sqlda.Dispose();
            if (dt.Rows.Count > 0)
            {
                DataList_category.DataSource = dt;
                DataList_category.DataBind();
                con.Close();
            }
            else
            {
                DataList_category.DataSource = dt;
                DataList_category.DataBind();
                con.Close();
            }

        }

    }
}