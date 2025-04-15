namespace berkalkulator
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            label1 = new Label();
            label2 = new Label();
            bruttoInput = new TextBox();
            nettoInput = new TextBox();
            checkBox1 = new CheckBox();
            button1 = new Button();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(36, 19);
            label1.Name = "label1";
            label1.Size = new Size(63, 15);
            label1.TabIndex = 0;
            label1.Text = "Bruttó bér:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(36, 56);
            label2.Name = "label2";
            label2.Size = new Size(60, 15);
            label2.TabIndex = 1;
            label2.Text = "Nettó bér:";
            // 
            // bruttoInput
            // 
            bruttoInput.Location = new Point(105, 11);
            bruttoInput.Name = "bruttoInput";
            bruttoInput.Size = new Size(100, 23);
            bruttoInput.TabIndex = 2;
            // 
            // nettoInput
            // 
            nettoInput.Location = new Point(105, 48);
            nettoInput.Name = "nettoInput";
            nettoInput.Size = new Size(100, 23);
            nettoInput.TabIndex = 3;
            // 
            // checkBox1
            // 
            checkBox1.AutoSize = true;
            checkBox1.Location = new Point(36, 86);
            checkBox1.Name = "checkBox1";
            checkBox1.Size = new Size(93, 19);
            checkBox1.TabIndex = 4;
            checkBox1.Text = "SZJA mentes";
            checkBox1.UseVisualStyleBackColor = true;
            // 
            // button1
            // 
            button1.Location = new Point(36, 111);
            button1.Name = "button1";
            button1.Size = new Size(167, 23);
            button1.TabIndex = 5;
            button1.Text = "Számolás";
            button1.UseVisualStyleBackColor = true;
            button1.Click += button1_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(96F, 96F);
            AutoScaleMode = AutoScaleMode.Dpi;
            ClientSize = new Size(231, 149);
            Controls.Add(button1);
            Controls.Add(checkBox1);
            Controls.Add(nettoInput);
            Controls.Add(bruttoInput);
            Controls.Add(label2);
            Controls.Add(label1);
            Name = "Form1";
            Text = "Bérkalkulátor";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private TextBox bruttoInput;
        private TextBox nettoInput;
        private CheckBox checkBox1;
        private Button button1;
    }
}
