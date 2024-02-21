
    <style>
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .email-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .email-item {
            margin-bottom: 10px;
        }

        .email-label {
            font-weight: bold;
        }
    </style>

    <div class="email-container">
        <div class="email-heading">Contact Message received</div>

        <div class="email-item">
            <span class="email-label">Subject:</span>
            <span>{{ $data['subject'] }}</span>
        </div>
       
        <div class="email-item">
            <span class="email-label">Name:</span>
            <span>{{ $data['name'] }}</span>
        </div>

        <div class="email-item">
            <span class="email-label">Email:</span>
            <span>{{ $data['email'] }}</span>
        </div>

        <div class="email-item">
            <span class="email-label">Phone:</span>
            <span>{{ $data['phone'] }}</span>
        </div>

        <div class="email-item">
            <span class="email-label">Message:</span>
            <span>{{ $data['message'] }}</span>
        </div>

        <div class="email-item">
            <span class="email-label">Thank you</span>
        </div>
    </div>


