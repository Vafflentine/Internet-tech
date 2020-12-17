using System;
using System.Windows.Forms;
using Google.Apis.Gmail.v1;
using Google.Apis.Gmail.v1.Data;
using Google.Apis.Services;
using AE.Net.Mail;
namespace Itech
{
    public partial class Form1 : Form
    {
        static Form1 f;
        static ImapClient IC;
        MailMessage email = null;
        public Form1()
        {
            InitializeComponent();
            f = this;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                IC = new ImapClient("imap.gmail.com", textBox1.Text, textBox2.Text, AuthMethods.Login, 993, true);
                IC.SelectMailbox("INBOX");
                for (int i = 1; i < 10; i++)
                {
                    email = IC.GetMessage(IC.GetMessageCount() - i);
                    textBox3.AppendText("From: " + email.From + Environment.NewLine);
                    textBox3.AppendText("Subject: " + email.Subject + Environment.NewLine);
                    textBox3.AppendText("Body: " + email.Body + Environment.NewLine);
                    textBox3.AppendText("***********************************************************************************" + Environment.NewLine);
                }
            }
            catch
            {
                MessageBox.Show("Inncorect email or password");
            }
        }
    }
}   
