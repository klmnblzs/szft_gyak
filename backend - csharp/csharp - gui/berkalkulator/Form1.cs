using System.Windows.Forms.VisualStyles;

namespace berkalkulator
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            nettoInput.Enabled = false;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string brutto = bruttoInput.Text;
            bool isSzjaChecked = checkBox1.Checked;

            if (isSzjaChecked)
            {
                double result = double.Parse(brutto) * 0.665;
                nettoInput.Text = result.ToString();
            }   
            else
            {
                double result = double.Parse(brutto) * 0.815;
                nettoInput.Text = result.ToString();
            }
        }   
    }
}
