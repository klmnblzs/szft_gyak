namespace ConsoleApp1;

class Program
{
    public static void Main(string[] args)
    {
        List<Employee> employees = new List<Employee>();

        string[] lines = File.ReadAllLines("dolgozok.txt");

        for (int i = 1; i < lines.Length; i++)
        {
            string[] data = lines[i].Split(";");

            Employee employee = new Employee
            {
                EmployeeId = data[0],
                FirstName = data[1],
                LastName = data[2],
                BirthDate = DateTime.Parse(data[3]),
                Level = data[4],
                Role = data[5],
                Salary = data[6]
            };
            employees.Add(employee);
        }

        GetEmployeeAmt(employees);
        Console.WriteLine("\n");
        GetRoleAmt(employees);
        Console.WriteLine("\n");
        GetYoungest(employees);
        Console.WriteLine("\n");
        BestSalary(employees);
        Console.WriteLine("\n");
        HasMedior(employees);
        Console.WriteLine("\n");
        CountByLevel(employees);
    }

    static void ReadFile(List<Employee> employees)
    {
        for (int i = 0; i < employees.Count; i++)
        {
            Employee employee = employees[i];
            
            Console.WriteLine($"{employee.EmployeeId}, {employee.FirstName} {employee.LastName}");
        }
    }

    static void GetEmployeeAmt(List<Employee> employees)
    {
        Console.WriteLine("3. feladat:");
        Console.WriteLine($"Dolgozó száma: {employees.Count}");
    }

    static void GetRoleAmt(List<Employee> employees)
    {
        Console.WriteLine("4. feladat:");
        int amt = 0;
        
        for (int i = 0; i < employees.Count; i++)
        {
            Employee employee = employees[i];

            if (employee.Role.ToLower() == "szoftvermérnök")
            {
                amt += 1;
            }
        }
        
        Console.WriteLine($"{amt} szoftvermérnök szerepel a fájlban");
    }

    static void GetYoungest(List<Employee> employees)
    {
        Console.WriteLine("5. feladat:");
        Employee youngest = employees[0];

        for (int i = 0; i < employees.Count; i++)
        {
            Employee employee = employees[i];

            if (employee.BirthDate > youngest.BirthDate)
            {
                youngest = employee;
            }
        }
        
        Console.WriteLine($"Legfiatalabb dolgozó: {youngest.FirstName} {youngest.LastName} ({youngest.BirthDate})");
    }

    static void BestSalary(List<Employee> employees)
    {
        Console.WriteLine("6. feladat");
        Employee highestSalary = employees[0];
        
        for (int i = 0; i < employees.Count; i++)
        {
            Employee employee = employees[i];

            if (employee.Level.ToLower() == "junior")
            {
                if (int.Parse(employee.Salary) > int.Parse(highestSalary.Salary))
                {
                    highestSalary = employee;
                }
            }
        }
        
        Console.WriteLine($"Legjobban kereső junior:\n{highestSalary.FirstName} {highestSalary.LastName}\nPozíció: {highestSalary.Role}({highestSalary.Level})\nHavi fizetés: {highestSalary.Salary}Ft");
    }

    static void HasMedior(List<Employee> employees)
    {
        Console.WriteLine("7. feladat");
        int mediorAmt = 0;
        for (int i = 0; i < employees.Count; i++)
        {
            Employee employee = employees[i];

            if (employee.Level.ToLower() == "medior")
            {
                if (employee.Role.ToLower() == "tesztelő")
                {
                    mediorAmt += 1;
                }
            }
        }

        if (mediorAmt == 0)
        {
            Console.WriteLine("Nincs a cégnél Medior tesztelő");
        }
        else
        {
            Console.WriteLine($"A cégnél ennyi Medior tesztelő van: {mediorAmt}");
        }
    }
    
    static void CountByLevel(List<Employee> employees)
    {
        Console.WriteLine("8. feladat:");

        Dictionary<string, int> count = new Dictionary<string, int>
        {
            { "junior", 0 },
            { "medior", 0 },
            { "senior", 0 }
        };

        foreach (var employee in employees)
        {
            string level = employee.Level.Trim().ToLower();

            if (count.ContainsKey(level))
            {
                count[level]++;
            }
        }
    
        
        Console.WriteLine("junior: " + count["junior"]);
        Console.WriteLine("medior: " + count["medior"]);
        Console.WriteLine("senior: " + count["senior"]);
    }
}